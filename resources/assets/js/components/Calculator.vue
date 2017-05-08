<template>
    <div>
        <div class="block">
            <form>
                <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field is-grouped">
                            <p class="control is-expanded">
                                <input class="input is-medium" id="autoOrigin" type="text" placeholder="Origin" name="origin" required autofocus>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input is-medium" id="autoDestination" type="text" placeholder="Destination" name="dest" required>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded">
                                <input class="input is-medium" id="size" type="number" placeholder="Size of Assets" name="dest" required>
                            </p>
                        </div>
                        <button class="button is-medium is-primary" @click.prevent="submitForm">Search Loads</button>
                    </div>
                </div>
            </form>
        </div>
        <bl-calculator-chart></bl-calculator-chart>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
