<template>
    <div>
      <vue-mask
          class="form-control"
          v-model="date"
          mask="00/00/0000"
          name="data_nascimento"
          :raw="false"
          :options="options">
      </vue-mask>
    </div>
  </template>

  <script>
    import vueMask from 'vue-jquery-mask';

    export default {
      data () {
        return {
          date: null,
          options: {
            placeholder: '__/__/____',
          }
        }
      },
      components: {
        vueMask
      }
    }
  </script>
