import{m as u,e as f,o,c as p,w as s,a as i,u as e,H as _,d as g,k as h,b as a,i as n,n as y,L as b,p as k}from"./app.041d09c3.js";import{_ as v,a as x}from"./PrimaryButton.0a7bb8e6.js";import"./ApplicationLogo.48ef6ff1.js";import"./_plugin-vue_export-helper.cdc0426e.js";const w=a("div",{class:"mb-4 text-sm text-gray-600"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),V={key:0,class:"mb-4 font-medium text-sm text-green-600"},B=["onSubmit"],E={class:"mt-4 flex items-center justify-between"},H={__name:"VerifyEmail",props:{status:String},setup(r){const c=r,t=u(),d=()=>{t.post(route("verification.send"))},l=f(()=>c.status==="verification-link-sent");return(m,L)=>(o(),p(v,null,{default:s(()=>[i(e(_),{title:"Email Verification"}),w,e(l)?(o(),g("div",V," A new verification link has been sent to the email address you provided during registration. ")):h("",!0),a("form",{onSubmit:k(d,["prevent"])},[a("div",E,[i(x,{class:y({"opacity-25":e(t).processing}),disabled:e(t).processing},{default:s(()=>[n(" Resend Verification Email ")]),_:1},8,["class","disabled"]),i(e(b),{href:m.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:s(()=>[n("Log Out")]),_:1},8,["href"])])],40,B)]),_:1}))}};export{H as default};
