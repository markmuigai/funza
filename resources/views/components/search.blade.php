<div class="col-md-6 col-lg-12">
    <form class="" action="search-result.html">
        <div class="card shadow-none bg-transparent">
            <h3 class="card-header bg-warning font-weight-bold rounded-top text-white">Search</h3>
            <div class="card-body border border-top-0 rounded-bottom">
                <div class="input-group border-bottom pb-3 pt-4">
                    <input type="text" class="form-control border-0 px-1" placeholder="Enter Your Search" aria-describedby="basic-addon2">
                    <span class="input-group-addon" id="basic-addon2">
                        <input class="btn btn-sm btn-warning text-uppercase text-white shadow-sm" type="submit" value="Search">
                    </span>
                </div>
            </div>
        </div>
    </form>

    <div class="card shadow-none bg-transparent overflow-hidden">
        <h3 class="card-header bg-success font-weight-bold rounded-top text-white">Filter By</h3>
        <div class="card-body border border-top-0 rounded-bottom">
            <div class="filter">
                <div class="mb-4 pt-3">
                    <select class="select2-select w-100 bg-white" name="state">
                        <option value="0">All Classes</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-4">
                    <select class="select2-select w-100" name="state">
                        <option value="0">Ages</option>
                        <option value="1">05</option>
                        <option value="2">06</option>
                        <option value="3">07</option>
                        <option value="3">08</option>
                        <option value="3">09</option>
                    </select>
                </div>
            </div>

            <div class="price-range mt-6" id="price-range">
                <div class="mb-6" id="slider-non-linear-step"></div>
                <div class="price-range-content">
                    <input class="btn btn-success text-white text-uppercase" type="submit" value="Filter">
                    <span class="price-text">Price:</span>
                    <span class="price-value" id="lower-value"></span>
                    <span class="price-value" id="upper-value"></span>
                </div>
            </div>
        </div>
    </div>
</div>