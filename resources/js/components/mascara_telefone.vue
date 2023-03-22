<template>
    <div>
      <vue-mask
          class="form-control"
          v-model="date"
          mask="00 00000 0000"
          name="telefone"
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
            placeholder: '(__) _____ ____',
          }
        }
      },
      components: {
        vueMask
      }
    }
  </script>
