<div class="form-row otherinput{{ $key }}">
    <div class="form-group clickplus">
        <input type="text" class="form-control" name="brands[]" id="clickplus" placeholder="Brand Name (click ‘&minus;’ to remove brand) ">
    </div>
    <div class="form-group inputplus">
        <a href="javascript:void(0);" class="btn inputminus" id="inputminus{{ $key }}">&minus;</a>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#inputminus{{ $key }}").on("click", function () {
            $(".otherinput{{ $key }}").closest('div').remove();
        });
    });
</script>