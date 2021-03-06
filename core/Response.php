<?php

class Response
{
    protected $content;
    protected $status_code = 200;
    protected $status_text = 'OK';
    protected $http_headers = array();

    public function send()
    {
        header('HTTP/1.1' . $this->status_code . ' ' . $this->$this->status_code )  ;
        foreach ($this->$http_headers as $name => $value){
            header($name . ':' . $value );
        }
        echo $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setStatus($status_code , $status_text = '')
    {
        $this->status_code = $status_code;
        $this->status_text = $status_text;
    }

    public function setHttpHeader($http_headers)
    {
        $this->http_headers[$name] = $value;
    }    

}