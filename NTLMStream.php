<?php
/**
 * HTTPS stream wrapper using Microsoft's NTLM Authentication
 * 
 * Copyright (c) 2008 Invest-In-France Agency http://www.invest-in-france.org
 * 
 * Author : Thomas Rabaix
 * 
 * Permission to use, copy, modify, and distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 * 
 * @link http://rabaix.net/en/articles/2008/03/13/using-soap-php-with-ntlm-authentication
 * @author Thomas Rabaix
 */

/**
 * HTTPS stream wrapper using Microsoft's NTLM Authentication
 * 
 * @link http://rabaix.net/en/articles/2008/03/13/using-soap-php-with-ntlm-authentication
 * @author Thomas Rabaix
 */
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
		$this->createBuffer($path);
		return true;
	}
	
	public function stream_close() {
		curl_close($this->ch);
		
		return true;
	} // end function stream_close()
	
	public function stream_read($count) {
		if(strlen($this->buffer) == 0) {
			return false;
		}
		$read = substr($this->buffer,$this->pos, $count);
		$this->pos += $count;
		return $read;
	} // end function stream_read()
	
	public function stream_write($data) {
		if(strlen($this->buffer) == 0) {
			return false;
		}
		return true;
	} // end function stream_write()
	
	public function stream_eof() {
		if($this->pos > strlen($this->buffer)) {
			return true;
		}
		return false;
	} // end function stream_eof()
    
    /**
	 * Return the position of the current read pointer
	 * 
	 * @return integer
	 */
    public function stream_tell() {
        return $this->pos;
    } // end function stream_tell();

    public function stream_flush() {
        $this->buffer = null;
        $this->pos = null;
    } // end function stream_flush()
    
    public function stream_stat() {
        $this->createBuffer($this->path);
        $stat = array(
            'size' => strlen($this->buffer),
        );
        return $stat;
    } // end function stream_stat()
    
    public function url_stat($path, $flags) {
        $this->createBuffer($path);
        $stat = array(
            'size' => strlen($this->buffer),
        );
        return $stat;
     } // end function url_stat()
     
     /**
	  * Create the buffer by requesting the url through cURL
	  * 
	  * @param string $path
	  */
     private function createBuffer($path) {
        if($this->buffer) {
            return true;
        }
        $this->ch = curl_init($path);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($this->ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
        curl_setopt($this->ch, CURLOPT_USERPWD, $this->user.':'.$this->password);
        $this->buffer = curl_exec($this->ch);
        $this->pos = 0;
		
		return true;
    } // end function createBuffer()
} // end class NTLMStream