<?php
require_once '../src/utils.php';


class IndexBP extends Blueprint {

    function __construct() {
        $this->route('/', 'main');
    }
    
    function main() {
        return render_template('index.html', null);
    }
}
