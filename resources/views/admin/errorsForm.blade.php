    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>ВНИМАНИЕ!</strong> Возникли проблемы в заполнении формы.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif