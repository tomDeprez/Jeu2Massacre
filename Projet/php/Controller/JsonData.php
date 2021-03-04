<?php

class JsonData{
    protected $code;
    protected $data;
    protected $message;

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