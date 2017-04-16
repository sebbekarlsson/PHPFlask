<?php
require_once '../src/utils.php';


class IndexBP extends Blueprint {
    function __construct() {
        $this->base_url = '/';
    }
    
    public function route() {
        return render_template('index.html', null);
    }
}
