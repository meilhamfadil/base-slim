<?php namespace Core\Libraries;

use Defuse\Crypto\Crypto;
use Defuse\Crypto\Exception\EnvironmentIsBrokenException;
use Defuse\Crypto\Exception\WrongKeyOrModifiedCiphertextException;

class Encryption
{

    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function encrypt($data)
    {
        try {
            return Crypto::encryptWithPassword($data, $this->key);
        } catch (EnvironmentIsBrokenException $e) {
            exit($e);
        }
    }

    public function decrypt($data)
    {
        try {
            return Crypto::decryptWithPassword($data, $this->key);
        } catch (EnvironmentIsBrokenException $e) {
            exit($e);
        } catch (WrongKeyOrModifiedCiphertextException $e) {
            exit($e);
        }
    }
}
