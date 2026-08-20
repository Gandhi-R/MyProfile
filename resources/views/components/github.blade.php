

            <section id="github" class="page-section section-github">
                <div class="github-container">

                    <div class="github-title-wrapper">
                        <div class="github-line left-line"></div>
                        <div class="github-line right-line"></div>
                        <div class="github-banner">GITHUB STATISTICS</div>
                    </div>

                    <!-- GitHub Contribution Graph -->
                    <div class="github-graph-box">
                        <div class="github-graph-wrapper">

                            <!-- Baris label bulan -->
                            <div class="graph-months">
                                <div class="graph-day-labels-spacer"></div>
                                @php $lastMonth = null; @endphp
                                @foreach ($stats['contributions']['weeks'] as $week)
                                    @php
                                        $firstDay = $week['contributionDays'][0]['date'] ?? null;
                                        $monthLabel = '';
                                        if ($firstDay) {
                                            $month = \Carbon\Carbon::parse($firstDay)->format('M');
                                            if ($month !== $lastMonth) {
                                                $monthLabel = $month;
                                                $lastMonth = $month;
                                            }
                                        }
                                    @endphp
                                    <div class="graph-month-col">{{ $monthLabel }}</div>
                                @endforeach
                            </div>

                            <!-- Baris label hari + kotak-kotak -->
                            <div class="graph-body">
                                <div class="graph-day-labels">
                                    <span>Mon</span>
                                    <span>Wed</span>
                                    <span>Fri</span>
                                </div>

                                <div class="github-graph-grid">
                                    @foreach ($stats['contributions']['weeks'] as $week)
                                        <div class="graph-col">
                                            @foreach ($week['contributionDays'] as $day)
                                                @php
                                                    $count = $day['contributionCount'];
                                                    $level = match (true) {
                                                        $count === 0 => 0,
                                                        $count <= 2 => 1,
                                                        $count <= 5 => 2,
                                                        $count <= 9 => 3,
                                                        default => 4,
                                                    };
                                                @endphp
                                                <div class="graph-cell level-{{ $level }}"
                                                    title="{{ $day['date'] }}: {{ $count }} contributions">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- 4 Stat Cards -->
                    <div class="github-stats-grid">

                        <!-- Stars Card -->
                        <div class="stat-card bg-gold">
                            <div class="stat-header">
                                <span class="stat-title">STARS</span>
                                <img src="{{ asset('images/icons/icon-bintang.svg') }}" alt="Star" class="stat-icon">
                            </div>
                            <h3 class="stat-number">{{ $stats['repos']['total_stars'] }}</h3>
                            <p class="stat-desc">RECEIVED ON PROJECTS</p>
                        </div>

                        <!-- Repositories Card -->
                        <div class="stat-card bg-purple">
                            <div class="stat-header">
                                <span class="stat-title">REPOSITORIES</span>
                                <img src="{{ asset('images/icons/icon-repositories.svg') }}" alt="Repo"
                                    class="stat-icon">
                            </div>
                            <h3 class="stat-number">{{ $stats['repos']['total_repos'] }}</h3>
                            <p class="stat-desc">PUBLIC REPOSITORIES</p>
                        </div>

                        <!-- Followers Card -->
                        <div class="stat-card bg-white">
                            <div class="stat-header">
                                <span class="stat-title">FOLLOWERS</span>
                                <img src="{{ asset('images/icons/icon-person.svg') }}" alt="Users" class="stat-icon">
                            </div>
                            <h3 class="stat-number">{{ $stats['user']['followers'] }}</h3>
                            <p class="stat-desc">GITHUB FOLLOWERS</p>
                        </div>

                        <!-- Contributions Card -->
                        <div class="stat-card bg-green">
                            <div class="stat-header">
                                <span class="stat-title">CONTRIBUTIONS</span>
                                <img src="{{ asset('images/icons/icon-contributies.svg') }}" alt="Commit"
                                    class="stat-icon">
                            </div>
                            <h3 class="stat-number">{{ $stats['contributions']['total'] }}</h3>
                            <p class="stat-desc">LAST YEAR</p>
                        </div>

                    </div>

                </div>
            </section>