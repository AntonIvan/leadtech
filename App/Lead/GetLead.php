<?php
use LeadGenerator\Generator;
use LeadGenerator\Lead;

class GetLead {

    private $generator;

    public function __construct()
    {
        $this->generator = new Generator();
    }

    function get() {
        $this->generator->generateLeads(10000, function (Lead $lead) {
            exec("php /app/func.php ".$lead->id." ".$lead->categoryName." > /dev/null &");
            sleep(0.02);
        });
    }


}