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
    	try {
        	$request = Http::timeout(10);

        	if (!empty($this->token)) {
            	$request = $request->withToken($this->token);
        	}

        	$response = $request->get("https://api.github.com/users/{$this->username}");

        	if ($response->successful() && is_array($response->json())) {
            	return $response->json();
        	}
    	} catch (\Throwable $e) {
        // Abaikan error API agar halaman portofolio tetap tampil normal
    	}

    	return [
        	'public_repos' => 0,
        	'followers' => 0,
    	];
	}

    protected function fetchRepoStats(): array
    {
        try {
            $request = Http::timeout(10);

            if (!empty($this->token)) {
                $request = $request->withToken($this->token);
            }

            $response = $request->get("https://api.github.com/users/{$this->username}/repos", [
                'per_page' => 100,
            ]);

            if ($response->successful() && is_array($response->json())) {
                $repos = $response->json();

                return [
                    'total_repos' => count($repos),
                    'total_stars' => collect($repos)->sum('stargazers_count'),
                ];
            }
        } catch (\Throwable $e) {
            // Abaikan error API agar halaman portofolio tetap tampil normal
        }

        return [
            'total_repos' => 0,
            'total_stars' => 0,
        ];
    }

    protected function fetchContributions(): array
    {
        if (empty($this->token)) {
            return [
                'total' => 0,
                'weeks' => [],
            ];
        }

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

        try {
            $response = Http::timeout(10)
                ->withToken($this->token)
                ->post('https://api.github.com/graphql', [
                    'query' => $query,
                    'variables' => ['username' => $this->username],
                ]);

            if ($response->successful() && !$response->json('errors')) {
                $data = $response->json('data.user.contributionsCollection.contributionCalendar');

                return [
                    'total' => $data['totalContributions'] ?? 0,
                    'weeks' => $data['weeks'] ?? [],
                ];
            }
        } catch (\Throwable $e) {
            // Abaikan error GraphQL agar halaman portofolio tetap tampil normal
        }

        return [
            'total' => 0,
            'weeks' => [],
        ];
    }
}