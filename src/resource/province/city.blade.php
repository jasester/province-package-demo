<select name="provinceId" id="">
    @foreach($datas ?? [] as $v)
        <option value="{{ $v->id }}">{{ $v->name }}</option>
    @endforeach
</select>