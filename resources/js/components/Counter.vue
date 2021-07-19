<template>
    <div class="counter-area">
        <button @click="decrementCounter">-</button>
        {{ counter }}
        <button @click="incrementCounter">+</button>
    </div>
</template>

<script>
export default {
    name: 'Counter',

    data() {
        return {
            counter:0
        }
    },

    methods: {
        incrementCounter() {
            this.counter++;
        },

        decrementCounter() {
            this.counter--;
        }
    },
}
</script>
