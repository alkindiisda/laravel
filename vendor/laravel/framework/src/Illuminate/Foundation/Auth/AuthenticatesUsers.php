<?php

namespace Illuminate\Foundation\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Log;
use App\models\Role;
use App\models\RoleUser;
use Session;

trait AuthenticatesUsers
{
    use RedirectsUsers;

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }

        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        $throttles = in_array(
            ThrottlesLogins::class, class_uses_recursive(get_class($this))
        );

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        if (Auth::attempt($this->getCredentials($request), $request->has('remember'))) {
            if ($throttles) {
                $this->clearLoginAttempts($request);
            }

           // Log::info(Auth::user()->hasRole('admin'));
           // Log::info(Auth::user()->can('ui_features'));
            $roleid=RoleUser::where('user_id',Auth::user()->id)->get();
           // Log::alert($roleid[0]);
            $permit=Role::with('perms')->where('id', $roleid[0]->role_id)
                ->get();
          //  Log::info($permit[0]->perms);

           // Log::alert(json_encode($child));
            $menus =[];
            foreach($permit[0]->perms as $detail){
                if($detail->parent == '0'){
                    $menu=array();
                    foreach($permit[0]->perms as $child){

                        if($child->parent == $detail->id){
                            array_push($menu, $child);
                        }
                    }
                    $detail =array_add($detail,'child',$menu);
                    array_push($menus, $detail);
                }
            }
            //Log::info($menus);
            Session::set('menu', $menus);
            return redirect()->intended($this->redirectPath());
        }

        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        return $request->only($this->loginUsername(), 'password');
    }

    /**
     * Get the failed login message.
     *
     * @return string
     */
    protected function getFailedLoginMessage()
    {
        return 'These credentials do not match our records.';
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    /**
     * Get the path to the login route.
     *
     * @return string
     */
    public function loginPath()
    {
        return property_exists($this, 'loginPath') ? $this->loginPath : '/auth/login';
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function loginUsername()
    {
        return property_exists($this, 'username') ? $this->username : 'email';
    }
}
