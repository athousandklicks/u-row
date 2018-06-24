@if (Auth::guard('web')->check())

    You are Logged In as a <strong>USER ||</strong>

@else
  
    You are Logged Out as a <strong>USER ||</strong>

@endif

@if (Auth::guard('admin')->check())

    You are Logged In as a <strong>ADMIN</strong>
  
@else
 
    You are Logged Out as a <strong>ADMIN</strong>
  
@endif
