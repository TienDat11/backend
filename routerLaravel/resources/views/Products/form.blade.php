<h1>THEM CHUYEN MUC</h1>

<form method="POST" action="<?php echo route('product.add') ?>">
    <div>
        <input type="text" name="user" placeholder="vui long nhap ten...">
        {{-- <input type="hidden" name="_method" value="POST"> --}}
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">Submit</button>
</form>
