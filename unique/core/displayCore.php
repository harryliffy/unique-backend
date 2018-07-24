<?php
 include('database.php');
Class UbsfrontEnd    {

       // protected $now;
        protected $conns;
        public function __construct(){
        $databases= new FrontEndDatabase();
        $dbs=$databases->db_cons;
        $this->conns=$dbs;

    }


    public function eventsPageDisplay()
        {
            $stmt_log_access = $this->conns->prepare("SELECT * FROM sch_events ORDER BY event_date DESC LIMIT 10");
                        $stmt_log_access->execute();
                        //$stmtrow=$stmt_log_access->fetch(PDO::FETCH_ASSOC)
                       // return $stmtrow;
                        // set the resulting array to associative
                        while($result=$stmt_log_access->fetch(PDO::FETCH_ASSOC)  )
                            {
                                //initilise the input variables
                                extract($result);
                                echo $event_location;
                        $readLogId=$result['event_name'];
                        echo $readLogId .'<br>';
                        
                 /*       echo'	<div class="col-xs-6 col-lg-3">
		<div class="events-item">
			<div class="events-item-img">
				<a href="#">
					<img src="html/uploads/'.$result['event_image'].'" alt="image">
				</a>
			</div>
			<div class="events-item-info">
				<h3><a href="events-single">'.$result['event_name'].'</a></h3>
				<ul class="event-meta">
					<li>
						<i class="fa fa-calendar" aria-hidden="true"></i>
						April 03, 2018
					</li>
					<li>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						Unique blossoms schools
					</li>
				</ul>
				<p>'.$result['event_description'].'</p>
			</div>
			<div class="events-item-link">
				<a href="events-single" class="hvr-push">Learn More</a>
			</div>
		</div>
	</div>'; */

                            }
        }


}

?>