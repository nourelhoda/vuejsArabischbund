
<template>
  <v-app id="inspire">
    <v-app id="inspire">
      <v-navigation-drawer
        v-model="drawer"
        app
      >
        <v-list dense>
             <v-list-item link to='/'>
            <v-list-item-action>
              <v-icon>mdi-home</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>dashboard</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item link to='/container'>
            <v-list-item-action>
              <v-icon>mdi-grease-pencil</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>Finance</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
          <v-list-item to="/members" link>
            <v-list-item-action>
              <v-icon>mdi-account-settings</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>Members</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
            <v-list-item link @click="logout">
            <v-list-item-action>
              <v-icon>mdi-power</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>Log out</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-navigation-drawer>

      <v-app-bar
        app
        color="pink"
        dark
      >
        <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
        <v-toolbar-title>Application</v-toolbar-title>
      </v-app-bar>

      <v-main>
        <v-container
          class="fill-height"
          fluid
        >

          <v-row
            align="center"
            justify="center"
          >
            <v-col class="text-center">

           <router-view></router-view>
            </v-col>
          </v-row>
        </v-container>
      </v-main>
      <v-footer
        color="indigo"
        app
      >
        <span class="white--text">&copy; {{ new Date().getFullYear() }}</span>
      </v-footer>
    </v-app>
  </v-app>

</template>
<script>
    import dataTable from './dataTable.vue';
export default {

props: {
    source: String,
  },
components: {
            'data-table': dataTable
        },
  data: () => ({
    drawer: null,
  }),
  methods:{
      logout(){
          axios.post('/logout').then(response=>{
              window.location.href="login";
          })
      }
  }
}
</script>
