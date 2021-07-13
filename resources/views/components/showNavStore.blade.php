<a class="show-btn" href="{{$store->store_url}}">
    ネットショップ
</a>
@if (Auth::check() && $userItemNum != 0)
<form class="" method="POST" action="{{ route('applications.store',['user' => Auth::id()])}}">
    @csrf
    <input name="storeId" type="hidden" value="{{$store->id}}">
    <input name="storeOwnerId" type="hidden" value="{{$store->storeOwner->id}}">
    <input class="" type="submit" value="応募する">

    <select required name="userItemId" id="userItemSelect">
        <option selected></option>
        @foreach ($userItems as $userItem)
        <option value="{{$userItem->id}}">{{$userItem->title}}</option>
        @endforeach
    </select>
</form>
@elseif(Auth::check() && $userItemNum == 0)
    <a class="" href="{{ route('items.create', ['user' => Auth::id()]) }}">商品を登録して応募</a>
@endif