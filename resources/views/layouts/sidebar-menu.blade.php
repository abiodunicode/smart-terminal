<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
      <router-link to="/dashboard" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt blue"></i>
        <p>
          Dashboard
        </p>
      </router-link>
    </li>





    @can('isAdmin')
    <li class="nav-item">
      <router-link to="/courier" class="nav-link">
        <i class="nav-icon fas fa-calendar orange"></i>
        <p>
          Add New Process
        </p>
      </router-link>
    </li>
    @endcan

    @can('isAdmin')
    <li class="nav-item">
      <router-link to="/tracking" class="nav-link">
        <i class="nav-icon fas fa-cog green"></i>
        <p>
          Tracking History
        </p>
      </router-link>
    </li>
    @endcan

    @can('isAdmin')
    <li class="nav-item">
      <router-link to="/users" class="nav-link">
        <i class="fa fa-users nav-icon blue"></i>
        <p>Users</p>
      </router-link>
    </li>
    @endcan

    <li class="nav-item">
      <router-link to="/profile" class="nav-link">
        <i class="nav-icon fas fa-cog green"></i>
        <p>
          Profile
        </p>
      </router-link>
    </li>



    @can('isAdmin')
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cog green"></i>
        <p>
          Settings
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <router-link to="/product/category" class="nav-link">
            <i class="nav-icon fas fa-list-ol green"></i>
            <p>
              Category
            </p>
          </router-link>
        </li>





        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Developer
            </p>
          </router-link>
        </li>
      </ul>
    </li>

    @endcan

    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-cog green"></i>
        <p>
          Vessel Planning
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <router-link to="/addVessel" class="nav-link">
            <i class="nav-icon fas fa-plus green"></i>
            <p>
              Create Vessel
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/VesselProperties" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Vessel Properties
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/addVesselProperties" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Vessel Cargo Summary
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Vessel Schedule
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Vessel Doc-Lock
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Manage Billing Dates
            </p>
          </router-link>
        </li>
      </ul>
    </li>


    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-ship green"></i>
        <p>
          Vessel Records
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <router-link to="/addVesselRecords" class="nav-link">
            <i class="nav-icon fas fa-plus green"></i>
            <p>
              Vessel Names Records
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-ship blue"></i>
            <p>
              Vessel Properties
            </p>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Vessel Cargo Summary
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Vessel Schedule
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Vessel Doc-Lock
            </p>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="/developer" class="nav-link">
            <i class="nav-icon fas fa-cogs white"></i>
            <p>
              Manage Billing Dates
            </p>
          </router-link>
        </li>
      </ul>
    </li>



    <li class="nav-item">
      <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-power-off red"></i>
        <p>
          {{ __('Logout') }}
        </p>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>
</nav>