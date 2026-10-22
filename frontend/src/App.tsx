import { useEffect, useState } from 'react';
import { api } from './api';

export default function App() {
  const [msg, setMsg] = useState('');

  useEffect(() => {
    api.get('/hello').then((res) => setMsg(res.data.message));
  }, []);

  return <h1>{msg || 'Đang tải...'}</h1>;
}