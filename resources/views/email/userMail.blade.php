<h1>Dear {{$userInfo->name}}</h1>
<div class="">You have been register to the system with Role:
    {{$userInfo->roles[0] !=null ? $userInfo->roles[0]->name : "Normal"}}
</div>