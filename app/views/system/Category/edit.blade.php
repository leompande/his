<script type="text/javascript">
    $(function()
    {
        $("#facility").pickList(
            {
                sourceListLabel:	"Unadded",
                targetListLabel:	"Added",
                addAllLabel:		"+ All",
                addLabel:			"+",
                removeAllLabel:		"- All",
                removeLabel:		"-",
                sortAttribute:		"value"
            });


    });
</script>
<style>
    .pickList_sourceListContainer, .pickList_controlsContainer, .pickList_targetListContainer {
        float: left;
        margin: 0.25em;
    }
    .pickList_controlsContainer {
        text-align: center;
    }
    .pickList_controlsContainer button {
        display: block;
        width: 100%;
        text-align: center;
    }
    .pickList_list {
        list-style-type: none;
        margin: 0;
        padding: 0;
        float: left;
        width: 150px;
        height: 75px;
        border: 1px inset #eee;
        overflow-y: auto;
        cursor: default;
    }
    .pickList_selectedListItem {
        background-color: #a3c8f5;
    }
    .pickList_listLabel {
        font-size: 0.9em;
        font-weight: bold;
        text-align: center;
    }
    .pickList_clear {
        clear: both;
    }.pickList_sourceListContainer, .pickList_controlsContainer, .pickList_targetListContainer {
         float: left;
        border-radius: 2px;
         margin: 0.25em;
     }
    .pickList_controlsContainer {
        text-align: center;
    }
    .pickList_controlsContainer button {
        display: block;
        width: 100%;
        text-align: center;
    }
    .pickList_list {
        list-style-type: none;
        margin: 0;
        padding: 0;
        float: left;
        width: 150px;
        height: 75px;
        border: 1px inset #eee;
        overflow-y: auto;
        cursor: default;
    }
    .pickList_selectedListItem {
        background-color: #a3c8f5;
    }
    .pickList_listLabel {
        font-size: 0.9em;
        font-weight: bold;
        text-align: center;
    }
    .pickList_clear {
        clear: both;
    }
</style>
<div class="row">
    <div class="col-md-12">
    <p>Edit Category <b>{{ $category->category_name }}</b></p>
        <form role="form" id="category_form">

            <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}" id="category_name" >
                <input type="hidden" class="form-control" name="id" value="{{ $category->id }}" id="category_name" >
            </div>
            <div class="form-group">
                <label for="facility">Facility</label>
                <select class="form-control"  name="facilities[]" id="facility" multiple="multiple">
                    @foreach (Facility::all() as $facility)
                    <option value="{{ $facility->id }}">{{ $facility->facility }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="size">Size/Capacity</label>
                <input type="text" class="form-control" name="size" id="size" value="{{ $category->size }}" >
            </div><div class="form-group">
                <label for="beds">Beds</label>
                <input type="text" class="form-control" name="beds" id="beds" value="{{ $category->bedrooms }}" >
            </div><div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" id="location" value="{{ $category->location }}" >
            </div><div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $category->price }}" >
            </div>

           <button type="submit" class="btn btn-warning" id="process_update">Update</button>
           <button type="button" class="btn btn-danger" id="cancel_update">Cancel</button>
            <div class="output"></div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#category_form").on('submit',function(e){
            e.preventDefault();
            $(".output").html("<h4 ><i class='fa fa-spinner fa-spin'></i> registering category wait ...</h4>");
            var formValues = $(this).serialize();

            $.ajax({
                type: "POST",
                url: 'category/update',
                data: formValues,
                success: whenSucceed
            });

        });


        function whenSucceed(){
            $(".output").html("<h4 ><span style='color: green;'><i class='fa fa-ok'></i> registered successifully</h4>");
            setTimeout(function(){
                $(".output").html("");
            },1000);
            $("#category_list").load("<?php echo url("categories/list")?>");
            $("#category_add").load("<?php echo url("category/add")?>");
        }
    });
</script>