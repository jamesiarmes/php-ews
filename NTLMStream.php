<?php
class NTLMStream {
    private $path;
    private $mode;
    private $options;
    private $opened_path;
    private $buffer;
    private $pos;

    public function stream_open($path, $mode, $options, $opened_path) {
        echo "[NTLMStream::stream_open] $path , mode=$mode \n";
        $this->path = $path;
        $this->mode = $mode;
        $this->options = $options;
        $this->opened_path = $opened_path;
        $this->createBuffer($path); return true;
    }

    public function stream_close() {
        echo "[NTLMStream::stream_close] \n";
        curl_close($this->ch);
    }

    public function stream_read($count) {
        echo "[NTLMStream::stream_read] $count n";
        if(strlen($this->buffer) == 0) {
            return false;
        }
        $read = substr($this->buffer,$this->pos, $count);
        $this->pos += $count; return $read;
    }
    
    public function stream_write($data) {
        echo "[NTLMStream::stream_write] n";
        if(strlen($this->buffer) == 0) {
            return false;
        }
        return true;
    }

    public function stream_eof() {
        echo "[NTLMStream::stream_eof] ";
        if($this->pos > strlen($this->buffer)) {
            echo "true n"; return true;
        }
        echo "false n"; return false;
    }
    
    /* return the position of the current read pointer */
    public function stream_tell() {
        echo "[NTLMStream::stream_tell] n";
        return $this->pos;
    }

    public function stream_flush() {
        echo "[NTLMStream::stream_flush] n";
        $this->buffer = null;
        $this->pos = null;
    }
    
    public function stream_stat() {
        echo "[NTLMStream::stream_stat] n";
        $this->createBuffer($this->path);
        $stat = array(
            'size' => strlen($this->buffer),
        );
        return $stat;
    }
    
    public function url_stat($path, $flags) {
        echo "[NTLMStream::url_stat] n";
        $this->createBuffer($path);
        $stat = array(
            'size' => strlen($this->buffer),
        );
        return $stat;
     }
     
     /* Create the buffer by requesting the url through cURL */
     private function createBuffer($path) {
        if($this->buffer) {
            return;
        }
        echo "[NTLMStream::createBuffer] create buffer from : $pathn";
        $this->ch = curl_init($path);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($this->ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
        curl_setopt($this->ch, CURLOPT_USERPWD, $this->user.':'.$this->password);
        echo $this->buffer = curl_exec($this->ch);
        echo "[NTLMStream::createBuffer] buffer size : ".strlen($this->buffer)."bytesn";
        $this->pos = 0;
    }
}