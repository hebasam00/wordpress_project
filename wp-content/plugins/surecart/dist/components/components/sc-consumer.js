import{proxyCustomElement,HTMLElement,createEvent}from"@stencil/core/internal/client";const ScConsumer$1=proxyCustomElement(class extends HTMLElement{constructor(){super(),this.__registerHost(),this.mountEmitter=createEvent(this,"mountConsumer",7),this.setContext=async e=>(this.context=e,this.promise),this.renderer=void 0,this.context=void 0,this.promise=void 0,this.resolvePromise=void 0,this.promise=new Promise((e=>{this.resolvePromise=e}))}componentWillLoad(){this.mountEmitter.emit(this.setContext)}disconnectedCallback(){this.resolvePromise()}render(){return this.context?this.renderer(this.context):null}},[0,"sc-consumer",{renderer:[8],context:[32],promise:[32],resolvePromise:[32]}]);function defineCustomElement$1(){"undefined"!=typeof customElements&&["sc-consumer"].forEach((e=>{"sc-consumer"===e&&(customElements.get(e)||customElements.define(e,ScConsumer$1))}))}const ScConsumer=ScConsumer$1,defineCustomElement=defineCustomElement$1;export{ScConsumer,defineCustomElement};