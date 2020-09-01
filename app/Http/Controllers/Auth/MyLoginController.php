<?php
class MyLoginController extends LoginController {

protected $redirectAfterLogout = '/goodbye';

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect($this->redirectAfterLogout);
    }
}

?>