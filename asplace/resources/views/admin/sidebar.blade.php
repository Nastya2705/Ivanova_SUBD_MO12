<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            {{ __('account.Sidebar') }}
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/dashboard') }}">
                        {{ __('account.Dashboard') }}                        
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">                
                <li role="presentation">
                    <a href="{{ url('/admin/supplier') }}">
                        {{ __('tables.supplier') }}                        
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">                
                <li role="presentation">
                    <a href="{{ url('/admin/category') }}">
                        {{ __('tables.category') }}                        
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">                
                <li role="presentation">
                    <a href="{{ url('/admin/product') }}">
                        {{ __('tables.product') }}                        
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">                
                <li role="presentation">
                    <a href="{{ url('/admin/selling') }}">
                        {{ __('tables.selling') }}                        
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
