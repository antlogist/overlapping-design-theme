function setParams(config) {
  const params = config.params || {};
  const data = config.data || {};

  config.params = Object.assign(params, {});
  config.data = Object.assign(data, {});

  return config;
}

function returnData(res) {
  return res.data;
}

function onError(err) {
  console.dir(err);
  return Promise.reject(err);
}

export default function (axios) {
  axios.interceptors.request.use(setParams);
  axios.interceptors.response.use(returnData, onError);
}
