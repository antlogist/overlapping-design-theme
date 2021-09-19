import axios from "axios";
import interceptors from "./interceptors.js";

const instance = axios.create({
  baseURL: baseUrl
});

interceptors(instance);

export default instance;
