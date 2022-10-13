<template>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <router-link to="" class="nav-link show"
                    ><h4>Vessel Properties</h4></router-link
                  >
                </li>
              </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <!-- Activity Tab -->
                <div class="tab-pane active show" id="activity"></div>
                <!-- Setting Tab -->

                <h5><strong>Update Vessel Properties</strong></h5>
                <hr />
                <p>
                  Here you can add the vessel characteristics eg: LOA, Flag / Nationality,
                  EDI voyages, call sign etc
                </p>

                <input type="checkbox" id="checkbox" v-model="checked" />
                <label for="checkbox">{{ checked }}</label>

                <form @submit.prevent class="form-horizontal">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Select Vessel Name :</label
                      >

                      <div class="col-sm-4">
                        <v-select
                          v-model="form.vessel_name"
                          as="vessel_name"
                          :from="vesselnames"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('vessel_name') }"
                        ></v-select>

                        

                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>
                  </div>
                 

                  <div
                    v-if="form.vessel_name != ''"
                    class="card-body"
                    style="margin-top: -20px"
                  >
                    

                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >AIS Type {{form.ais_type}} :</label
                      >
                      <div class="col-sm-4">
                       <select 
                       class="form-control" 
                       v-model="form.ais_type"
                       :class="{ 'is-invalid': form.errors.has('ais_type') }"
                        >
                        <option value="" disabled selected>-Select-</option>
                        <option>CARGO VESSEL</option>
                        <option>TANKER VESSEL</option>
                        <option>CARGO BARGE</option>
                        <option>SERVICE BARGE</option>
                        
                        </select>
                        <has-error :form="form" field="ais_type"></has-error>
                      </div>
                    </div>
                    
                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Ship Type :</label
                      >
                      <div class="col-sm-4">
                       <select 
                       class="form-control" 
                       v-model="form.ship_type"
                       :class="{ 'is-invalid': form.errors.has('ship_type') }"
                       >
                        <option value="" disabled selected>-Select-</option>
                        <option>CONTAINER VESSEL</option>
                        <option>RORO VESSEL</option>
                        <option>GENERAL CARGO VESSEL</option>
                        <option>BULK CARRIER VESSEL</option>
                        
                        </select>

                        
                        <has-error :form="form" field="ship_type"></has-error>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Vessel Nationality* :</label
                      >

                      <div class="col-sm-4">
                        <v-select
                          v-model="form.vessel_nationality"
                         
                          :from="port_codes"
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('vessel_nationality') }"
                        ></v-select>

                        

                        <has-error :form="form" field="vessel_nationality"></has-error>
                      </div>
                    </div>

                     <!-- <div>
        <div v-for="data in country">{{data}}</div>
    </div> -->

                      <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Vessel Destination* :</label
                      >
                      <div class="col-sm-4">
                        <v-select
                          v-model="form.vessel_name"
                         
                          class="form-control"
                          :class="{ 'is-invalid': form.errors.has('vessel_name') }"
                        ></v-select>
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>

                     <hr />
                  <h5>Ship Particulars</h5>
                   <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >IMO Number* :</label
                      >
                      <div class="col-sm-4">
                        <input
                          required
                          v-model="form.voyage_number"
                          type="text"
                          name="voyage_number"
                          :class="{ 'is-invalid': form.errors.has('voyage_number') }"
                          class="form-control"
                        />
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Ships Draft* :</label
                      >
                      <div class="col-sm-4">
                        <input
                          required
                          v-model="form.voyage_number"
                          type="text"
                          name="voyage_number"
                          :class="{ 'is-invalid': form.errors.has('voyage_number') }"
                          class="form-control"
                        />
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Call Sign* :</label
                      >
                      <div class="col-sm-4">
                        <input
                          required
                          v-model="form.voyage_number"
                          type="text"
                          name="voyage_number"
                          :class="{ 'is-invalid': form.errors.has('voyage_number') }"
                          class="form-control"
                        />
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Ships LOA* :</label
                      >
                      <div class="col-sm-4">
                        <input
                          required
                          v-model="form.voyage_number"
                          type="text"
                          name="voyage_number"
                          :class="{ 'is-invalid': form.errors.has('voyage_number') }"
                          class="form-control"
                        />
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>
<hr/>
                     <h5>EDI Voyage Numbers</h5>
                   <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Incoming Voyage* :</label
                      >
                      <div class="col-sm-4">
                        <input
                          required
                          v-model="form.voyage_number"
                          type="text"
                          name="voyage_number"
                          :class="{ 'is-invalid': form.errors.has('voyage_number') }"
                          class="form-control"
                        />
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Outgoing Voyage* :</label
                      >
                      <div class="col-sm-4">
                        <input
                          required
                          v-model="form.voyage_number"
                          type="text"
                          name="voyage_number"
                          :class="{ 'is-invalid': form.errors.has('voyage_number') }"
                          class="form-control"
                        />
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>
                        <hr/>
                     <h5>Vessel Service / Call</h5>
                   <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Vessel Service* :</label
                      >
                      <div class="col-sm-4">
                        <input
                          required
                          v-model="form.voyage_number"
                          type="text"
                          name="voyage_number"
                          :class="{ 'is-invalid': form.errors.has('voyage_number') }"
                          class="form-control"
                        />
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"
                        >Last Port of Call* :</label
                      >
                      <div class="col-sm-4">
                        <input
                          required
                          v-model="form.voyage_number"
                          type="text"
                          name="voyage_number"
                          :class="{ 'is-invalid': form.errors.has('voyage_number') }"
                          class="form-control"
                        />
                        <has-error :form="form" field="vessel_name"></has-error>
                      </div>
                    </div>
                  </div>
             

                  <hr />

                  <div class="form-group">
                    <div class="col-md-6 mx-auto">
                      <!-- <button type="submit" class="btn btn-success">Save</button> -->
                      <button type="submit" @click="createNew" class="btn btn-primary">
                        Create
                      </button>
                      <button type="reset" class="btn btn-primary" @click="reset">
                        Reset
                      </button>
                    </div>
                  </div>
                </form>
                <!-- Setting Tab -->

                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- end tabs -->
      </div>
    </div>
  </section>
</template>

<script>
 import CountryData from "../json/countries.json";

//let countries = JSON.parse(CountryData);
export default {
  mounted() {
    console.log("Component mounted.");
  },

  data() {
    return {
      countrys: [] ,
      portcodes: [] ,
      users: "",
      selected:'',
      checked: false,
      vesselnames: [],

      form: new Form({
        // tracking: "",

        vessel_name: "",
        voyage_number: "",
        ais_type:"",
        selected:'',
        ship_type:'',
        vessel_nationality:'',

      }),
    };
  },

  methods: {
   async loadVessels() {
      this.$Progress.start();

      // if(this.$gate.isAdmin()){
    await  axios.get("api/vesselnames").then(({ data }) => (this.vesselnames = data.data));
      // console.log(this.vesselnames);
     
      // }

      this.$Progress.finish();
    },
    async loadCountries() {
      this.$Progress.start();

      // if(this.$gate.isAdmin()){
       await   axios.get("api/countries").then(({ data }) => (this.countrys = data.data));
      // console.log(this.countrys);
      // }

      this.$Progress.finish();
    },
   async loadPortcodes() {
      this.$Progress.start();
      await    axios.get("api/portcodes").then(({ data }) => (this.portcodes = data.data));
       this.$Progress.finish();
    },

    reset() {
      this.form.vessel_name = "";
      this.form.voyage_number = "";
    },

    createNew() {
      this.form
        .post("api/createvessel")
        .then((response) => {
          // $('#addNew').modal('hide');

          Toast.fire({
            icon: "success",
            title: response.data.message,
          });

          this.$Progress.finish();
          this.form.vessel_name = "";
          this.form.voyage_number = "";

          // this.loadUsers();
        })
        .catch(() => {
          Toast.fire({
            icon: "error",
            title: "Empty fields - Some error occured! Please try again",
          });
        });
    },
  },
  created() {
    this.$Progress.start();
    this.loadPortcodes();
    this.loadVessels();
    this.loadCountries();
    this.$Progress.finish();
    
  },

  computed: {
    options() {
      return Object.keys(this.vesselnames).map((k) => {
        let o = this.vesselnames[k];
       

        return `${o.vessel_name} ` ;
      });
    },

    countries() {
      return Object.keys(this.countrys).map((k) => {
        let o = this.countrys[k];
      
       
       return `${o.name} ` 
      });
    },
     port_codes() {
    //   return Object.keys(this.portcodes).map((k) => {
    //     let o = this.portcodes[k];
    //      return `${o.name} ` 
    //  });
    },
    
  },
};
</script>
