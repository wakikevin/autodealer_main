<!--start main content-->
<div id="main">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Dashboard</h1>
            </div>
            <div class="pull-right">
                <!--<ul class="minitiles">
                    <li class='grey'>
                        <a href="#"><i class="icon-cogs"></i></a>
                    </li>
                    <li class='lightgrey'>
                        <a href="#"><i class="icon-globe"></i></a>
                    </li>
                </ul>-->
                <ul class="stats">
                    <!--<li class='satgreen'>
                        <i class="icon-money"></i>
                        <div class="details">
                            <span class="big">$324,12</span>
                            <span>Balance</span>
                        </div>
                    </li>-->
                    <li class='lightred'>
                        <i class="icon-calendar"></i>
                        <div class="details">
                            <span class="big"><?php echo date('F j, Y'); ?>  </span>
                            <span><?php echo date('L h:i'); ?></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li>
                    <a href="">Home</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="">Dashboard</a>
                </li>
            </ul>
            <div class="close-bread">
                <!--<a href="#"><i class="icon-remove"></i></a>-->
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <div class="box box-color box-bordered">
                    <div class="box-title">
                        <h3>
                            <i class="icon-bar-chart"></i>
                            Audience Overview
                        </h3>
                        <div class="actions">
                            <a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
                            <a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
                            <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="statistic-big">
                            <div class="top">
                                <div class="left">
                                    <div class="input-medium">
                                        <select name="category" class='chosen-select' data-nosearch="true">
                                            <option value="1">Visits</option>
                                            <option value="2">New Visits</option>
                                            <option value="3">Unique Visits</option>
                                            <option value="4">Pageviews</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="right">
                                    8,195 <span><i class="icon-circle-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="flot medium" id="flot-audience"></div>
                            </div>
                            <div class="bottom">
                                <ul class="stats-overview">
                                    <li>
                                        <span class="name">
                                            Visits
                                        </span>
                                        <span class="value">
                                            11,251
                                        </span>
                                    </li>
                                    <li>
                                        <span class="name">
                                            Pages / Visit
                                        </span>
                                        <span class="value">
                                            8.31
                                        </span>
                                    </li>
                                    <li>
                                        <span class="name">
                                            Avg. Duration
                                        </span>
                                        <span class="value">
                                            00:06:41
                                        </span>
                                    </li>
                                    <li>
                                        <span class="name">
                                            % New Visits
                                        </span>
                                        <span class="value">
                                            67,35%
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="box box-color lightred box-bordered">
                    <div class="box-title">
                        <h3>
                            <i class="icon-bar-chart"></i>
                            HDD usage
                        </h3>
                        <div class="actions">
                            <a href="#" class="btn btn-mini content-refresh"><i class="icon-refresh"></i></a>
                            <a href="#" class="btn btn-mini content-remove"><i class="icon-remove"></i></a>
                            <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <div class="statistic-big">
                            <div class="top">
                                <div class="left">
                                    <div class="input-medium">
                                        <select name="category" class='chosen-select' data-nosearch="true">
                                            <option value="1">Today</option>
                                            <option value="2">Yesterday</option>
                                            <option value="3">Last week</option>
                                            <option value="4">Last month</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="right">
                                    50% <span><i class="icon-circle-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="flot medium" id="flot-hdd"></div>
                            </div>
                            <div class="bottom">
                                <ul class="stats-overview">
                                    <li>
                                        <span class="name">
                                            Usage
                                        </span>
                                        <span class="value">
                                            50%
                                        </span>
                                    </li>
                                    <li>
                                        <span class="name">
                                            Usage % / User
                                        </span>
                                        <span class="value">
                                            0.031
                                        </span>
                                    </li>
                                    <li>
                                        <span class="name">
                                            Avg. Usage %
                                        </span>
                                        <span class="value">
                                            60%
                                        </span>
                                    </li>
                                    <li>
                                        <span class="name">
                                            Idle Usage %
                                        </span>
                                        <span class="value">
                                            12%
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box box-color box-bordered lightgrey">
                    <div class="box-title">
                        <h3><i class="icon-ok"></i> Tasks</h3>
                        <div class="actions">
                            <a href="#new-task" data-toggle="modal" class='btn'><i class="icon-plus-sign"></i> Add Task</a>
                        </div>
                    </div>
                    <div class="box-content nopadding">
                        <ul class="tasklist">
                            <li class='bookmarked'>
                                <div class="check">
                                    <input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
                                </div>
                                <span class="task"><i class="icon-ok"></i><span>Approve new users</span></span>
                                <span class="task-actions">
                                    <a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
                                    <a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
                                </span>
                            </li>
                            <li>
                                <div class="check">
                                    <input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
                                </div>
                                <span class="task"><i class="icon-bar-chart"></i><span>Check statistics</span></span>
                                <span class="task-actions">
                                    <a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
                                    <a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
                                </span>
                            </li>
                            <li class='done'>
                                <div class="check">
                                    <input type="checkbox" class='icheck-me' data-skin="square" data-color="blue" checked>
                                </div>
                                <span class="task"><i class="icon-envelope"></i><span>Check for new mails</span></span>
                                <span class="task-actions">
                                    <a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
                                    <a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
                                </span>
                            </li>
                            <li>
                                <div class="check">
                                    <input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
                                </div>
                                <span class="task"><i class="icon-comment"></i><span>Chat with John Doe</span></span>
                                <span class="task-actions">
                                    <a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
                                    <a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
                                </span>
                            </li>
                            <li>
                                <div class="check">
                                    <input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
                                </div>
                                <span class="task"><i class="icon-retweet"></i><span>Go and tweet some stuff</span></span>
                                <span class="task-actions">
                                    <a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
                                    <a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
                                </span>
                            </li>
                            <li>
                                <div class="check">
                                    <input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
                                </div>
                                <span class="task"><i class="icon-edit"></i><span>Write an article</span></span>
                                <span class="task-actions">
                                    <a href="#" class='task-delete' rel="tooltip" title="Delete that task"><i class="icon-remove"></i></a>
                                    <a href="#" class='task-bookmark' rel="tooltip" title="Mark as important"><i class="icon-bookmark-empty"></i></a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        
        <!--close container-fluid-->
    </div>
    
    <!--close main-->
</div>

<!--closing tag for container-->
</div>