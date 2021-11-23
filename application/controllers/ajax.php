<?php

class Ajax extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('action');
    }

    public function retrieve($table) {
        $result = $this->action->read($table);
        echo json_encode($result);
    }

    public function retrieveBy($table) {
        $receive = filter_input(INPUT_POST, 'condition');
        $condition = json_decode($receive, TRUE); // json object to array

        $result = $this->action->read($table, $condition);
        echo json_encode($result);
    }

    public function deleteInfo($table) {
        // for database
        $receiveCond = filter_input(INPUT_POST, 'condition');
        $condArray = json_decode($receiveCond, TRUE); // json object to array

        // delete from database
        $confirm = $this->action->deleteData($table, $condArray);
        // show message
        echo $this->data[$confirm];
    }

    public function deleteWithFile($table) {
        // for database
        $receiveCond = filter_input(INPUT_POST, 'condition');
        $condArray = json_decode($receiveCond, TRUE); // json object to array
        // for files
        $receiveFile = filter_input(INPUT_POST, 'file');

        //check file exists or not
        if( !empty($receiveFile) ){
            $fileArray = explode(',', $receiveFile); // create an array
            // delete file from dir
            for($i=0;$i<count($fileArray);$i++){
                $path = './public/attachment/'.$fileArray[$i];
                unlink($path);
            }
        }

        // delete from database
        $confirm = $this->action->deleteData($table, $condArray);
        // show message
        echo $this->data[$confirm];
    }










    public function readJoinData(){
        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);
        
        // take table name from the array
        $form = $receive['from'];
        $join = $receive['join'];

        // take the condition
        $joinCond = $receive['cond'];

        // check and set where condition exists or not
        $where = array();
        if(array_key_exists('where', $receive)){
            foreach ($receive['where'] as $key => $val) {
                if($val != ""){
                    $where[$key] = $val;
                }
            }
        }

        // get information from database
        $result = $this->action->joinAndRead($form, $join, $joinCond, $where);

        // convart the information array to JSON string
        echo json_encode($result);
    }
    
    
    
    public function readJoinDataOrderBy(){
        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);

        // take table name from the array
        $form = $receive['from'];
        $join = $receive['join'];
        
        // check order by 
        $by = $type = NULL;
         if(array_key_exists('by', $receive)){
            $by = $receive['by'];
        }
         if(array_key_exists('type', $receive)){
            $type = $receive['type'];
        }
        
        
      
        

        // take the condition
        $joinCond = $receive['cond'];

        // check and set where condition exists or not
        $where = array();
        if(array_key_exists('where', $receive)){
            foreach ($receive['where'] as $key => $val) {
                if($val != ""){
                    $where[$key] = $val;
                }
            }
        }

        // get information from database
        $result = $this->action->joinAndReadOrderBy($form, $join, $joinCond, $where,$by,$type);

        // convart the information array to JSON string
        echo json_encode($result);
    }


    public function readJoinDataFromMultipleTable(){
        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);

        // take table name from the array
        $form = $receive['from'];
        $join = $receive['join'];

        // check and set where condition exists or not
        $where = array();
        if(array_key_exists('where', $receive)){
            foreach ($receive['where'] as $key => $val) {
                if($val != ""){
                    $where[$key] = $val;
                }
            }
        }

        // get information from databas
        $result = $this->action->multipleJoinAndRead($form, $join, $where);

        // convart the information array to JSON string
        echo json_encode($result);
    }


    // all new functions
    public function read(){
        // get the incoming object
        $content = file_get_contents('php://input');
        // convart object to array
        $receive = json_decode($content, true);
        // take table name from the array
        $table = $receive['table'];
        // set a default condition
        $condition = array();
        // check the condition exists into the array
        if(is_array($receive) && array_key_exists('cond', $receive)){
            // $condition = $receive['cond'];
            foreach($receive['cond'] as $key => $val){
                if($val != null){
                    $condition[$key] = $val;
                }
            }
        }
        // get information from database
        $result = $this->action->read($table, $condition);
        // convart the information array to JSON string
        echo json_encode($result);
    }



    // all new functions
    public function readGroupBy(){
        // get the incoming object
        $content = file_get_contents('php://input');
        // convart object to array
        $receive = json_decode($content, true);
        // take table name from the array
        $table = $receive['table'];

        //column name
        $column = $receive['column'];
        // set a default condition
        $condition = array();
        // check the condition exists into the array
        if(is_array($receive) && array_key_exists('cond', $receive)){
            // $condition = $receive['cond'];
            foreach($receive['cond'] as $key => $val){
                if($val != null){
                    $condition[$key] = $val;
                }
            }
        }
        // get information from database
        $result = $this->action->readGroupBy($table, $column,$condition,'id','asc');
        // convart the information array to JSON string
        echo json_encode($result);
    }

        // all new functions
    public function readstu(){
        // get the incoming object
        $content = file_get_contents('php://input');
        // convart object to array
        $receive = json_decode($content, true);
        // take table name from the array
        $table = $receive['table'];
        // set a default condition
        $condition = array();
        // check the condition exists into the array
        if(is_array($receive) && array_key_exists('cond', $receive)){
            // $condition = $receive['cond'];
            foreach($receive['cond'] as $key => $val){
                if($val != null){
                    $condition[$key] = $val;
                }
            }
        }
        // get information from database
        $result = $this->action->readStudent($table, $condition);
        // convart the information array to JSON string
        echo json_encode($result);
    }





    public function delete(){
        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);

        // take table name from the array
        $table = $receive['table'];

        // set a default condition
        $condition = array();

        // check the condition exists into the array
        if(array_key_exists('cond', $receive)){
            $condition = $receive['cond'];
        }

        // check and delete file from folder
        if(array_key_exists('file', $receive)){
            if($receive['file'] == true){
                // get information from database
                $result = $this->action->read($table, $condition);
                $this->deleteFile($result[0]->path);
            }
        }

        // delete from database
        $confirm = $this->action->deleteData($table, $condition);

        // show message
        echo $this->data[$confirm];
    }

    public function deleteFileJS(){
        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);

        // call the deleteFile function
        $this->deleteFile($receive);
    }

    public function deleteFile($files=array()) {
        foreach($files as $key => $file) {
            $path = './'.$file;
            unlink($path);
        }
    }

    public function save(){
        $result = null;

        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);

        // take table name from the array
        $table = $receive['table'];

        // take data from the array
        $data = $receive['data'];

        // set a default condition
        $condition = array();

        // check the condition exists into the array
        if(array_key_exists('cond', $receive)){
            $condition = $receive['cond'];
            $result = $this->action->update($table, $data, $condition);
        } else {
            $result = $this->action->add($table, $data);
        }

        // convart the information array to JSON string
        echo $result;
    }

    public function memberId(){
        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);
        $branch = $receive["branch"];
        $team = $receive["team"];

        // get id no
        $memberId = memberId('members', $branch, $team);
        echo $memberId;
    }

    public function calculateAge(){
        echo age($_POST["dob"]);
    }

    public function getTransactionDescription(){
        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);
        $key = $receive["key"];

        echo json_encode(config_item($key));
    }
    
    
    // all result
    public function result(){
        // get the incoming object
        $content = file_get_contents("php://input");

        // convart object to array
        $receive = json_decode($content, true);

        // take table name from the array
        $table = $receive['table'];

        // set a default condition
        $where = array();
        // check the condition exists into the array
        if(array_key_exists('cond', $receive)){
            $where = $receive['cond'];
        }
        
        // check select column
        if(array_key_exists('select', $receive)){
            $select = $receive['select'];
        }else{
            $select = '';
        }

        // check group
        if(array_key_exists('groupBy', $receive)){
            $groupBy = $receive['groupBy'];
        }else{
            $groupBy = '';
        }
        
        // check border by
        if(array_key_exists('order_col', $receive) &&  array_key_exists('order_by', $receive)){
            $order_col = $receive['order_col'];
            $order_by  = $receive['order_by'];
        }else{
            $order_col = '';
            $order_by = '';
        }
        
        // check limit
        if(array_key_exists('limit', $receive)){
            $limit = $receive['limit'];
        }else{
            $limit = '';
        }
        
        // get information from database
        $result = get_result($table, $where, $select, $groupBy, $order_col, $order_by, $limit);

        // convart the information array to JSON string
        echo json_encode($result);
    }
    
    
    // all join
    public function join(){
        // get the incoming object
        $content = file_get_contents("php://input");
        

        // convart object to array
        $receive = json_decode($content, true);

        // take table name from the array
        $tableFrom  = $receive['tableFrom'];
        $tableTo    = $receive['tableTo'];

        // join condition
        $joinCond = array();
        // check the condition exists into the array
        if(array_key_exists('joinCond', $receive)){
            $joinCond = $receive['joinCond'];
        }
        
        // where condition
        $where = array();
        if(array_key_exists('cond', $receive)){
            $where = $receive['cond'];
        }
        
        // check select column
        if(array_key_exists('select', $receive)){
            $select = $receive['select'];
        }else{
            $select = '';
        }

        // check group
        if(array_key_exists('groupBy', $receive)){
            $groupBy = $receive['groupBy'];
        }else{
            $groupBy = '';
        }
        
        // check border by
        if(array_key_exists('order_col', $receive) &&  array_key_exists('order_by', $receive)){
            $order_col = $receive['order_col'];
            $order_by  = $receive['order_by'];
        }else{
            $order_col = '';
            $order_by = '';
        }
        
        // check limit
        if(array_key_exists('limit', $receive)){
            $limit = $receive['limit'];
        }else{
            $limit = '';
        }
        
        // get information from database
        $result = get_join($tableFrom, $tableTo, $joinCond, $where, $select, $groupBy, $order_col, $order_by, $limit);

        // convart the information array to JSON string
        echo json_encode($result);
    }

}
