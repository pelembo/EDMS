<li class="{!! (Request::is('workGroups*') ? 'active' : '' ) !!}">
    <a href="{{ route('workGroups.index') }}">
        <span class="mm-text ">Work Groups</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('documentTypes*') ? 'active' : '' ) !!}">
    <a href="{{ route('documentTypes.index') }}">
        <span class="mm-text ">Document  Types</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('employees*') ? 'active' : '' ) !!}">
    <a href="{{ route('employees.index') }}">
        <span class="mm-text ">Employees</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('states*') ? 'active' : '' ) !!}">
    <a href="{{ route('states.index') }}">
        <span class="mm-text ">States</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('documents*') ? 'active' : '' ) !!}">
    <a href="{{ route('documents.index') }}">
        <span class="mm-text ">Documents</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

