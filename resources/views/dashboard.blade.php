@extends('head')
@section('maincontent')

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Dashboard</h2>
	
		<div class="right-wrapper text-right">
			<ol class="breadcrumbs">
				<li>
					<a href="{{route('dashboard')}}">
						<i class="fas fa-home"></i>
					</a>
				</li>
				<li><span>Pages</span></li>
				<li><span>Dashboard</span></li>
			</ol>
	
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
		</div>
	</header>

	<!-- start: page -->
	<div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Calendar</h2>
                <?php
                $dt = new DateTime;
                if (isset($_GET['year']) && isset($_GET['week'])) {
                    $dt->setISODate($_GET['year'], $_GET['week']);
                } else {
                    $dt->setISODate($dt->format('o'), $dt->format('W'));
                }
                $year = $dt->format('o');
                $week = $dt->format('W');
                ?>

               <div class="text-center">
                    <a class="btn btn-sm btn-success" href="{{route('dashboard')}}<?php echo '?week='.($week-1).'&year='.$year; ?>">Previous Week</a> <!--Previous week-->

                    <a class="btn btn-sm btn-info" href="{{route('dashboard')}}">Current Week</a>

                    <a class="btn btn-sm btn-primary" href="{{route('dashboard')}}<?php echo '?week='.($week+1).'&year='.$year; ?>">Next Week</a> <!--Next week-->
               </div>

                <table class="table table-bordered">
                    <tr>
                    <td>Time</td>  
                <?php
                do {
                    echo "<td>" . $dt->format('l') . "<br>" . $dt->format('d M Y') . "</td>\n";
                    $dt->modify('+1 day');
                } while ($week == $dt->format('W'));
                ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                   <tr>
                       <td>5 AM</td>
                        <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='5 am' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>6 AM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='6 am' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>7 AM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='7 am' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>8 AM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='8 am' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>9 AM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='9 am' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>10 AM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='10 am' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>11 AM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='11 am' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>12 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='12 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>1 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='1 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>2 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='2 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>3 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='3 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>4 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='4 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?> 
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>5 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='5 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?> 
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>6 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='6 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?> 
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>7 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='7 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?> 
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>8 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='8 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?> 
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>9 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='9 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?> 
                    </tr>
                    <?php
                        $dt = new DateTime;
                        if (isset($_GET['year']) && isset($_GET['week'])) {
                            $dt->setISODate($_GET['year'], $_GET['week']);
                        } else {
                            $dt->setISODate($dt->format('o'), $dt->format('W'));
                        }
                        $year = $dt->format('o');
                        $week = $dt->format('W');

                        $tasks = DB::table('tasks')->where('user_id',$user_id)->get();
                    ?>
                    <tr>
                       <td>10 PM</td>
                       <?php
                            do {
                                echo "<td align='center'>";
                                foreach ($tasks as $key => $task) {                             
                               
                                    if ($dt->format('d M Y')==date("d M Y", strtotime($task->timeframe)) && $task->time=='10 pm' ) {
                                        echo '<span style="width:100%;display:inline-block;background:';
                                        if($task->category=='aquistions'){ echo 'blue'; }elseif($task->category=='despositions'){echo 'green'; } elseif($task->category=='system development'){echo 'black'; } elseif($task->category=='personal'){echo 'yellow'; }

                                        echo ';">';
                                        echo $task->task_name;
                                        echo '</span>';
                                        echo '<br><a href="'.url('/completed_task').'/'.$task->id.'">complete now</a>';
                                        
                                    }

                                }
                                 echo "</td>\n";
                                $dt->modify('+1 day');
                            } while ($week == $dt->format('W'));
                        ?>
                    </tr>
                    
                </table>

            
        </div>
    </div>

	<!-- end: page -->
</section>

@endsection