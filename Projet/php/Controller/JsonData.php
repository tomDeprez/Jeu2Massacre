<?php

class JsonData
{
    private $code;
    private $data;
    private $message;


    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function jsonSerialize()
    {
        return
            [
                'code'   => $this->code,
                'data' => $this->data,
                'message' => $this->message,
            ];
    }
}
