<?php
if(!empty(Auth::user())){
$roleid = Auth::user()->user_role;
}
?>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="/">HOME</a>
  <a href="/about">HOW IT WORKS</a>
  <a href="/mymodules">MODULES</a>
  @if ((!empty($roleid)) && $roleid == 0)
  <a href="/admin">DASHBOARD</a>
  @endif
  
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  @guest
  @if (Route::has('login'))
 
  @endif
  @else
    <a  href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>
  
  @endguest
</div>

