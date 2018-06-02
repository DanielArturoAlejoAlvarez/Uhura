<template>
    <div>
        <h1 class="text-center" >Thinker</h1>
        <h2>Capture your thinking</h2>
        <div class="well">
            <h4>What are you thinking about?</h4>
            <form v-on:submit.prevent="createThink">                            
                <div class="input-group">
                    <input type="text" class="form-control input-sm" maxlength="256" v-model="newThink">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-primary" >ADD</button>
                    </span>
                </div>
            </form>
            <hr>
            <ul class="list-unstyled">
                <li v-for="think in thinkings">
                    <p><small><em class="text-muted" >{{ since(think.created_at) }}</em>...</small>
                        {{ think.desc }}
                    </p>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import axios  from 'axios';
    import toastr from 'toastr';
    import moment from 'moment';

    moment.locale('en');

    export default {
        data() {
            return{
                thinkings: [],
                newThink: '',
            }
        },
        created: function(){
            this.getThinkings();
        },
        methods: {
            since: function(d){
                return moment(d).fromNow();
            },
            getThinkings: function(){
                var urlThinkings = 'my-thinkings';
                axios.get(urlThinkings).then(response=>{
                    this.thinkings=response.data;
                });
            },
            createThink: function(){
                var url = 'save-think';
                axios.post(url, {
                    desc: this.newThink
                }).then(response=>{
                    this.getThinkings();
                    this.newThink='';
                    toastr.success('New think saved successfully.');
                }).catch(error=>{
                    toastr.error('ERROR!!');
                })

            }
        }
    }
</script>
