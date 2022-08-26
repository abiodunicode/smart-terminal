export default [
    { path: '/', component: require('./components/Home.vue').default },
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/shipschedules', component: require('./components/Shipschedules.vue').default },
    { path: '/courier', component: require('./components/Courier.vue').default },
    { path: '/courier-records', component: require('./components/CourierTable.vue').default },
    { path: '/tracking', component: require('./components/tracking.vue').default },
    //New routes for ebs
    { path: '/addVessel', component: require('./Views/AddVessel.vue').default },
    { path: '/addVesselRecords', component: require('./Views/AddVesselRecords.vue').default },
    { path: '/VesselProperties', component: require('./Views/VesselProperties.vue').default },


  



 

   


    { path: '*', component: require('./components/NotFound.vue').default }
];
