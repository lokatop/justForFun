<div class="row justify-content-center">
    <form action="/" method="get" class="m-3">
        <label class="m-2" for="title">Change Title or/and Desc</label>
        <div class="form-inline">
            <input name="title" type="text" class="m-2 form-control" id="title" placeholder="Enter title">
            <input name="desc" type="text" class="m-2 form-control" id="desc" placeholder="Enter description">
            <button type="submit" class="m-2 btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<div class="row justify-content-center">
    <form id="ajax_form" action="" method="post" class="m-3 border-top">
        <label class="m-2" for="title">Get Random Number</label>

        <div class="form-inline">
            <input name="amount"    required type="text" class="m-2 form-control" id="amount" placeholder="amount of nums">
            <input name="min"       required type="text" class="m-2 form-control" id="min" placeholder="min value of once num">
            <input name="max"       required type="text" class="m-2 form-control" id="max" placeholder="max value of once num">
            <button id="btn" type="submit" class="m-2 btn btn-primary">Submit</button>
        </div>
        <div class="form-check">
            <input name="checkbox" type="checkbox" class="form-check-input" id="withWord">
            <label class="form-check-label" for="withWord">with random word</label>
        </div>
    </form>
</div>
<div class="row justify-content-center">
    <p id="result_form"></p>
</div>
