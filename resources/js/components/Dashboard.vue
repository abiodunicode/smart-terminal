v
<template>
  <section class="content"></section>
</template>

<script>
export default {
  data() {
    return {
      editmode: false,
      shipschedules: {},
      form: new Form({
        id: "",
        liner: "",
        vessel_name: "",
        voyage_no: "",
        vessel_type: "",
        rotation_no: "",
        arrival_date: "",
        arrival_status: "",
        departure_status: "",
        departure_date: "",
        eta: "",
        invoice_status: "",
      }),
    };
  },
  methods: {
    getResults(page = 1) {
      this.$Progress.start();

      axios
        .get("api/shipschedule_one?page=" + page)
        .then(({ data }) => (this.shipschedules = data.data));

      this.$Progress.finish();
    },

    loadUsers() {
      this.$Progress.start();

      // if(this.$gate.isAdmin()){
      axios
        .get("api/shipschedule_one")
        .then(({ data }) => (this.shipschedules = data.data));
      console.log(shipschedules);
      // }

      this.$Progress.finish();
    },
  },
  mounted() {
    console.log("shipschedule Component mounted.");
  },
  created() {
    this.$Progress.start();
    this.loadUsers();
    this.$Progress.finish();
  },
};
</script>
