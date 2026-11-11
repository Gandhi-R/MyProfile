<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use RuntimeException;

class GithubStatsService
{
    protected string $username;
    protected string $token;

    public function __construct()
    {
        $username = config('services.github.username');
        $token = config('services.github.token');

        if (!is_string($username) || trim($username) === '') {
            throw new RuntimeException('GITHUB_USERNAME is not configured.');
        }

        if (!is_string($token) || trim($token) === '') {
            throw new RuntimeException('GITHUB_TOKEN is not configured.');
        }

        $this->username = $username;
        $this->token = $token;
    }

    public function getStats(): array
    {
        return Cache::remember('github_stats', now()->addMinutes(10), function () {
            return [
                'user' => $this->fetchUser(),
                'repos' => $this->fetchRepoStats(),
                'contributions' => $this->fetchContributions(),
            ];
        });
    }

    protected function fetchUser(): array
    {
        $response = Http::withToken($this->token)
            ->get("https://api.github.com/users/{$this->username}")
            ->throw();

        $user = $response->json();
        if (!is_array($user)) {
            throw new RuntimeException('GitHub returned an invalid user response.');
        }

        return $user;
    }

    protected function fetchRepoStats(): array
    {
        $response = Http::withToken($this->token)
            ->get("https://api.github.com/users/{$this->username}/repos", [
                'per_page' => 100,
            ])
            ->throw();

        $repos = $response->json();
        if (!is_array($repos)) {
            throw new RuntimeException('GitHub returned an invalid repositories response.');
        }

        $totalStars = collect($repos)->sum('stargazers_count');

        return [
            'total_repos' => count($repos),
            'total_stars' => $totalStars,
        ];
    }

    protected function fetchContributions(): array
    {
        $query = <<<'GRAPHQL'
        query($username: String!) {
          user(login: $username) {
            contributionsCollection {
              contributionCalendar {
                totalContributions
                weeks {
                  contributionDays {
                    date
                    contributionCount
                    weekday
                  }
                }
              }
            }
          }
        }
        GRAPHQL;

        $response = Http::withToken($this->token)
            ->post('https://api.github.com/graphql', [
                'query' => $query,
                'variables' => ['username' => $this->username],
            ])
            ->throw();

        if ($response->json('errors')) {
            throw new RuntimeException('GitHub contribution query failed; check token permissions and username.');
        }

        $data = $response->json('data.user.contributionsCollection.contributionCalendar');

        return [
            'total' => $data['totalContributions'] ?? 0,
            'weeks' => $data['weeks'] ?? [],
        ];
    }
}