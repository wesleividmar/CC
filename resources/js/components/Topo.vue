<template>
 <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

              <!-- Branding Image -->
              <a class="navbar-brand" v-bind:href="url">
                  {{ titulo }}
              </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <slot></slot>
                    </ul>
                </div>
            </div>
        </nav>
</template>

<script>
    export default {
    props:['titulo','url']
    }
</script>
