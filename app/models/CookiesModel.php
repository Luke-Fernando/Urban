<?php
class CookiesModel extends Model
{
    public function manage_cookie($cookie_name, $cookie_value, $expire_time)
    {
        setcookie($cookie_name, $cookie_value, [
            'expires' => $expire_time,
            'path' => '/',
            'samesite' => 'Lax',
        ]);
    }

    public function cookies($data = [])
    {
        extract($data);
        if ($cookies == "true") {
            $this->manage_cookie("cookies", "true", time() + (60 * 60 * 24 * 30));
        } else if ($cookies == "false") {
            $this->manage_cookie("cookies", "false", time() + (60 * 60 * 24 * 30));
        }
    }
}
