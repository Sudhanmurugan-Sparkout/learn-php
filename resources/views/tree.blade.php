<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Hierarchical Tree Structure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
            flex-direction: column; 
        }
        .center {
            position: relative;
            width: 200px; 
            height: 200px; 
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-wrap: wrap; 
            margin-bottom: 20px;
        }
        .circle {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
            border-radius: 50%;
            margin: 10px;
        }
        .company {
            width: 170px;
            height: 170px;
            border: 2px solid #2a7ae2;
            background-color: #e2f3ff;
            position: relative;
        }
        .team {
            width: 120px;
            height: 120px;
            border: 2px solid #3b83c0;
            background-color: #cce7ff;
            position: relative;
        }
        .role {
            width: 90px;
            height: 90px;
            border: 2px solid #1f4b6e;
            background-color: #99d0ff;
            position: relative;
        }
        .tree-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        .tree-row {
            display: flex;
            justify-content: center;
            margin: 10px 0;
            width: 100%;
        }
        .tree-node {
            margin: 0 10px;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="center">
        <h1>Company</h1>
        @foreach ($companies as $index => $company)
            <div class="circle company" id="company-{{ $index }}">
                <h2>{{ $company->name }}</h2>
                @if ($company->teams->isNotEmpty())
                    @foreach ($company->teams as $teamIndex => $team)
                        <div class="circle team" id="team-{{ $index }}-{{ $teamIndex }}">
                            <h3>{{ $team->name }}</h3>
                            @if ($team->roles->isNotEmpty())
                                @foreach ($team->roles as $roleIndex => $role)
                                    <div class="circle role" id="role-{{ $index }}-{{ $teamIndex }}-{{ $roleIndex }}">
                                        <p>{{ $role->name }}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const heading = $('.center h1');
            const companies = $('.company');
            treeStructure(heading, companies);

            companies.each(function() {
                const teams = $(this).find('.team');
                treeStructure($(this), teams);

                teams.each(function() {
                    const roles = $(this).find('.role');
                    treeStructure($(this), roles);
                });
            });

            function treeStructure(parent, children) {
                const container = $('<div class="tree-container"></div>').insertAfter(parent);
                const row = $('<div class="tree-row"></div>').appendTo(container);

                children.each(function() {
                    const node = $('<div class="tree-node"></div>').append($(this).detach());
                    row.append(node);
                });
            }
        });
    </script>
</body>
</html>
