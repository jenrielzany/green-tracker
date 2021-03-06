<div class="row">
    <div class="col-md-9 col-lg-9">
        <a ng-click="main()" class="btn btn-primary">Back to list</a>
    </div>
    <div class="col-md-3 col-lg-3">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <label class="bold">Set As</label>
            </div>
            <div class="col-md-8 col-lg-8">
                <select ng-change="setSelectedStatus(selectedStatus)" class="form-control" id="statuses" ng-model="selectedStatus"
                        ng-options="stat.status for stat in statuses track by stat.id">
                    <option value="">Select Status</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div>

</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        <h3>Order Detail</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Campaign</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.campaign_name}}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Product</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.product_name}}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Order Number</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.order_number}}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Date Sold</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.date_sold | date:'MMM dd, yyyy'}}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Is Ninety Days?</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.ninety_days == 1? 'Yes' : 'No'}}</p>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Remarks</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.remarks}}</p>
        </div>
    </div>
</div>

<hr/>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <h3>Customer</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Name</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.customer.first_name}} {{sale.customer.last_name}}</p>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Phone Number</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.customer.phone_number}}</p>
        </div>
    </div>
</div>

<hr/>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Processed By</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.processed_by}}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="col-md-2 col-lg-2">
            <label class="bold">Date Entered</label>
        </div>
        <div class="col-md-10 col-lg-10">
            <p>{{sale.created_at | dateToMils | date:'MMM dd, yyyy hh:mm a'}}</p>
        </div>
    </div>
</div>