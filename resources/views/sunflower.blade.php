<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sunflower Hierarchical Structure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
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
        }
        .center h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
        }
        .circle {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
            position: absolute;
            border-radius: 50%;
        }
        .company {
            width: 150px;
            height: 150px;
            border: 2px solid #2a7ae2;
            background-color: #e2f3ff;
        }
        .team {
            width: 120px;
            height: 120px;
            border: 2px solid #3b83c0;
            background-color: #cce7ff;
        }
        .role {
            width: 90px;
            height: 90px;
            border: 2px solid #1f4b6e;
            background-color: #99d0ff;
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
            const path = window.location.pathname;

            if (path === '/sunflower') {
                $('body').css('flex-direction', 'row');
                const centerElement = $('.center');
                const companies = $('.company');
                positionElements(centerElement, companies, 450); 

                companies.each(function() {
                    const teams = $(this).find('.team');
                    positionElements($(this), teams, 200);

                    teams.each(function() {
                        const roles = $(this).find('.role');
                        positionElements($(this), roles, 100); 
                    });
                });

                function positionElements(parent, children, radius) {
                    const numberOfChildren = (2 * Math.PI) / children.length;

                    children.each(function(index) {
                        const angle = index * numberOfChildren;    
                        const x = radius * Math.cos(angle) - $(this).outerWidth() / 2;
                        const y = radius * Math.sin(angle) - $(this).outerHeight() / 2;

                        $(this).css({
                            left: `${x + parent.outerWidth() / 2}px`,
                            top: `${y + parent.outerHeight() / 2}px`
                        });
                    });
                }
            } else if (path === '/tree') {
                $('body').css('flex-direction', 'column');
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
                        const node = $('<div class="tree-node"></div>').append($(this));
                        row.append(node);
                    });
                }
            }
        });
    </script>
</body>
</html>
