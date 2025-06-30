<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body class="bg-gray-50">
    <div class="min-h-screen">
        <!-- Sidebar -->
        <div class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-50 hidden md:block">
            <div class="flex items-center justify-center h-16 px-4 border-b border-gray-100">
                <h1 class="text-2xl font-bold gradient-text">NEXUS</h1>
            </div>
            <nav class="px-4 py-6">
                <div class="space-y-1">
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg">
                        <i class="fas fa-chart-line mr-3"></i>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                        <i class="fas fa-cog mr-3"></i>
                        Settings
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                        <i class="fas fa-users mr-3"></i>
                        Users
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                        <i class="fas fa-file-alt mr-3"></i>
                        Reports
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                        <i class="fas fa-bell mr-3"></i>
                        Notifications
                    </a>
                </div>
                <div class="mt-10">
                    <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Analytics</p>
                    <div class="mt-2 space-y-1">
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                            <i class="fas fa-chart-pie mr-3"></i>
                            Performance
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                            <i class="fas fa-database mr-3"></i>
                            Data Sources
                        </a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Mobile sidebar -->
        <div class="md:hidden fixed inset-0 z-40 bg-gray-900 bg-opacity-50 hidden" id="mobile-sidebar-backdrop"></div>
        <div class="md:hidden fixed inset-y-0 left-0 w-64 bg-white shadow-lg z-50 transform -translate-x-full transition duration-300 ease-in-out" id="mobile-sidebar">
            <div class="flex items-center justify-between h-16 px-4 border-b border-gray-100">
                <h1 class="text-2xl font-bold gradient-text">NEXUS</h1>
                <button class="text-gray-500 hover:text-gray-700" id="close-sidebar">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="px-4 py-6">
                <div class="space-y-1">
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg">
                        <i class="fas fa-chart-line mr-3"></i>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                        <i class="fas fa-cog mr-3"></i>
                        Settings
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                        <i class="fas fa-users mr-3"></i>
                        Users
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                        <i class="fas fa-file-alt mr-3"></i>
                        Reports
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-sm font-medium text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg">
                        <i class="fas fa-bell mr-3"></i>
                        Notifications
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main content -->
        <div class="md:ml-64">
            <!-- Top navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-4 py-3 sm:px-6">
                    <div class="flex items-center">
                        <button class="md:hidden text-gray-500 hover:text-gray-700" id="open-sidebar">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="ml-2 text-xl font-semibold text-gray-800">Dashboard</h1>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="p-2 text-gray-500 hover:text-gray-700">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="p-2 text-gray-500 hover:text-gray-700">
                            <i class="fas fa-bell"></i>
                        </button>
                        <div class="relative">
                            <button class="flex items-center space-x-2 focus:outline-none" id="user-menu">
                                <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User profile">
                                <span class="text-sm font-medium text-gray-700">John Doe</span>
                                <i class="fas fa-chevron-down text-xs text-gray-500"></i>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden" id="user-dropdown">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main content area -->
            <main class="px-4 py-6 sm:px-6">
                <!-- Stats cards -->
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Card 1 -->
                    <div class="glass-card hover-scale p-6 rounded-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Total Revenue</p>
                                <p class="mt-1 text-2xl font-semibold text-gray-800">$45,231</p>
                                <p class="mt-1 text-xs text-green-500 flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span>12% from last month</span>
                                </p>
                            </div>
                            <div class="p-3 rounded-lg bg-blue-50 text-blue-600">
                                <i class="fas fa-dollar-sign text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="glass-card hover-scale p-6 rounded-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Active Users</p>
                                <p class="mt-1 text-2xl font-semibold text-gray-800">2,453</p>
                                <p class="mt-1 text-xs text-green-500 flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span>8% from last month</span>
                                </p>
                            </div>
                            <div class="p-3 rounded-lg bg-blue-50 text-blue-600">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="glass-card hover-scale p-6 rounded-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">New Projects</p>
                                <p class="mt-1 text-2xl font-semibold text-gray-800">56</p>
                                <p class="mt-1 text-xs text-red-500 flex items-center">
                                    <i class="fas fa-arrow-down mr-1"></i>
                                    <span>3% from last month</span>
                                </p>
                            </div>
                            <div class="p-3 rounded-lg bg-blue-50 text-blue-600">
                                <i class="fas fa-folder-plus text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="glass-card hover-scale p-6 rounded-xl">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Avg. Session</p>
                                <p class="mt-1 text-2xl font-semibold text-gray-800">4.2m</p>
                                <p class="mt-1 text-xs text-green-500 flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span>21% from last month</span>
                                </p>
                            </div>
                            <div class="p-3 rounded-lg bg-blue-50 text-blue-600">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Charts section -->
                <div class="mt-8 grid grid-cols-1 gap-6 lg:grid-cols-2">
                    <!-- Line chart -->
                    <div class="glass-card hover-scale p-6 rounded-xl">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-gray-800">Revenue Overview</h2>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-xs font-medium rounded-full bg-blue-50 text-blue-600">Monthly</button>
                                <button class="px-3 py-1 text-xs font-medium rounded-full text-gray-500 hover:bg-blue-50 hover:text-blue-600">Yearly</button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <canvas id="lineChart" height="250"></canvas>
                        </div>
                    </div>

                    <!-- Bar chart -->
                    <div class="glass-card hover-scale p-6 rounded-xl">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-gray-800">Project Status</h2>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-xs font-medium rounded-full bg-blue-50 text-blue-600">Weekly</button>
                                <button class="px-3 py-1 text-xs font-medium rounded-full text-gray-500 hover:bg-blue-50 hover:text-blue-600">Monthly</button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <canvas id="barChart" height="250"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Recent activity -->
                <div class="mt-8">
                    <div class="glass-card hover-scale p-6 rounded-xl">
                        <h2 class="text-lg font-semibold text-gray-800">Recent Activity</h2>
                        <div class="mt-6">
                            <div class="space-y-4 max-h-96 overflow-y-auto scrollbar-hide">
                                <!-- Activity item 1 -->
                                <div class="flex items-start pb-4 border-b border-gray-100">
                                    <div class="p-2 rounded-lg bg-blue-50 text-blue-600 mr-4">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-800">New invoice received</p>
                                            <span class="text-xs text-gray-500">2 min ago</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">Invoice #INV-0001 from Acme Inc. for $1,200.00</p>
                                    </div>
                                </div>

                                <!-- Activity item 2 -->
                                <div class="flex items-start pb-4 border-b border-gray-100">
                                    <div class="p-2 rounded-lg bg-blue-50 text-blue-600 mr-4">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-800">New user registered</p>
                                            <span class="text-xs text-gray-500">1 hour ago</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">Sarah Johnson joined as a new customer</p>
                                    </div>
                                </div>

                                <!-- Activity item 3 -->
                                <div class="flex items-start pb-4 border-b border-gray-100">
                                    <div class="p-2 rounded-lg bg-blue-50 text-blue-600 mr-4">
                                        <i class="fas fa-project-diagram"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-800">Project completed</p>
                                            <span class="text-xs text-gray-500">3 hours ago</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">"Website Redesign" project marked as completed</p>
                                    </div>
                                </div>

                                <!-- Activity item 4 -->
                                <div class="flex items-start pb-4 border-b border-gray-100">
                                    <div class="p-2 rounded-lg bg-blue-50 text-blue-600 mr-4">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-800">Server maintenance</p>
                                            <span class="text-xs text-gray-500">5 hours ago</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">Scheduled maintenance completed successfully</p>
                                    </div>
                                </div>

                                <!-- Activity item 5 -->
                                <div class="flex items-start">
                                    <div class="p-2 rounded-lg bg-blue-50 text-blue-600 mr-4">
                                        <i class="fas fa-ticket-alt"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-medium text-gray-800">New support ticket</p>
                                            <span class="text-xs text-gray-500">1 day ago</span>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">Ticket #TKT-0042 opened by Michael Brown</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Mobile sidebar toggle
        const openSidebarBtn = document.getElementById('open-sidebar');
        const closeSidebarBtn = document.getElementById('close-sidebar');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const mobileSidebarBackdrop = document.getElementById('mobile-sidebar-backdrop');

        openSidebarBtn.addEventListener('click', () => {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileSidebarBackdrop.classList.remove('hidden');
        });

        closeSidebarBtn.addEventListener('click', () => {
            mobileSidebar.classList.add('-translate-x-full');
            mobileSidebarBackdrop.classList.add('hidden');
        });

        mobileSidebarBackdrop.addEventListener('click', () => {
            mobileSidebar.classList.add('-translate-x-full');
            mobileSidebarBackdrop.classList.add('hidden');
        });

        // User dropdown toggle
        const userMenuBtn = document.getElementById('user-menu');
        const userDropdown = document.getElementById('user-dropdown');

        userMenuBtn.addEventListener('click', () => {
            userDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
                userDropdown.classList.add('hidden');
            }
        });

        // Line Chart
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Revenue',
                    data: [12000, 19000, 15000, 20000, 22000, 25000, 28000, 30000, 32000, 35000, 40000, 42000],
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.05)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#3b82f6',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#fff',
                        titleColor: '#1f2937',
                        bodyColor: '#6b7280',
                        borderColor: '#e5e7eb',
                        borderWidth: 1,
                        padding: 12,
                        boxShadow: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                        callbacks: {
                            label: function(context) {
                                return '$' + context.parsed.y.toLocaleString();
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#9ca3af'
                        }
                    },
                    y: {
                        grid: {
                            color: '#f3f4f6',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#9ca3af',
                            callback: function(value) {
                                return '$' + value / 1000 + 'k';
                            }
                        }
                    }
                }
            }
        });

        // Bar Chart
        const barCtx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Planning', 'Design', 'Development', 'Testing', 'Deployment', 'Completed'],
                datasets: [{
                    label: 'Projects',
                    data: [15, 20, 30, 25, 18, 12],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.7)',
                        'rgba(59, 130, 246, 0.7)',
                        'rgba(59, 130, 246, 0.7)',
                        'rgba(59, 130, 246, 0.7)',
                        'rgba(59, 130, 246, 0.7)',
                        'rgba(59, 130, 246, 0.7)'
                    ],
                    borderColor: [
                        'rgba(59, 130, 246, 1)',
                        'rgba(59, 130, 246, 1)',
                        'rgba(59, 130, 246, 1)',
                        'rgba(59, 130, 246, 1)',
                        'rgba(59, 130, 246, 1)',
                        'rgba(59, 130, 246, 1)'
                    ],
                    borderWidth: 1,
                    borderRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#fff',
                        titleColor: '#1f2937',
                        bodyColor: '#6b7280',
                        borderColor: '#e5e7eb',
                        borderWidth: 1,
                        padding: 12,
                        boxShadow: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)'
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#9ca3af'
                        }
                    },
                    y: {
                        grid: {
                            color: '#f3f4f6',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#9ca3af'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>