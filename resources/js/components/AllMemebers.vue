<template>

<div class="limiter">
    <div class="container">
        <div>
            <div class="table100">
                <table>
                    <thead>
                        <tr class="table100-head">
                            <th class="column1">id</th>
                            <th class="column2">Vorname</th>
                            <th class="column3">Nachname</th>
                            <th class="column4">address</th>

                        </tr>
                    </thead>
                    <tbody>

                             <tr v-for="(member, index) in members">

                                <td class="column1">{{  member.id }}</td>
                                <td class="column2">{{  member.firstName }}</td>
                                <td class="column3"> {{ member.lastName }}</td>
                                <td class="column4">{{ member.address  }}</td>
                            </tr>

                            <!-- <p>No Customers</p> -->


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</template>
<script>
export default {
    // name: 'AllMemebers',
    data(){
          return{
              members:null,
          }
      },
      mounted() {
            console.log('Component mounted.')
             axios.get('/api/members').then(response=>{
                this.members = response.data;
                console.log(response.data);
            })
        },
        methods:{

        },

}
</script>
