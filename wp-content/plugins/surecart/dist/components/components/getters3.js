import{s as state}from"./store3.js";const currentFormState=()=>state.formState.value,formLoading=()=>"loading"===state.formState.value,formBusy=()=>["updating","finalizing","paying","confirming","redirecting"].includes(state.formState.value);export{formLoading as a,currentFormState as c,formBusy as f};