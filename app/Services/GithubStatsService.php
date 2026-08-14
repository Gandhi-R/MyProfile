<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class GithubStatsService
{
    protected string $username;
    protected string $token;

    public function __construct()
    {
        $this->username = config('services.github.username');
        $this->token = config('services.github.token');
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
            ->get("https://api.github.com/users/{$this->username}");

        return $response->json();
    }

    protected function fetchRepoStats(): array
    {
        $response = Http::withToken($this->token)
            ->get("https://api.github.com/users/{$this->username}/repos", [
                'per_page' => 100,
            ]);

        $repos = $response->json();
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
            ]);

        $data = $response->json('data.user.contributionsCollection.contributionCalendar');

        return [
            'total' => $data['totalContributions'] ?? 0,
            'weeks' => $data['weeks'] ?? [],
        ];
    }
}