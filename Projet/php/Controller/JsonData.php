<?php

class JsonData
{
    private $code;
    private $data;
    private $message;
    private $user;


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

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function jsonSerialize()
    {
        return
            [
                'code'   => $this->code,
                'data' => $this->data,
                'message' => $this->message,               
                'user' => $this->user,
            ];
    }
}
